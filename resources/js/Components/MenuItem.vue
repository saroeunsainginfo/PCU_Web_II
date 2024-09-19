<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
import SubMenuItem from "./SubMenuItem.vue";
import ArrowDownIcon from "./Icons/ArrowDownIcon.vue";

const activeIndex = ref(null);

const props = defineProps({
    index: Number,
    title: String,
    href: {
        type: String,
        default: "#",
    },
    items: {
        type: Array,
        required: false,
    },
});

const toggleSubMenu = (index) => {
    activeIndex.value = activeIndex.value === index ? null : index;
};

const enter = (el) => {
    el.style.height = "0";
    el.style.opacity = "0";
    el.offsetHeight;
    el.style.transition = "height 0.3s ease, opacity 0.3s ease";
    el.style.height = el.scrollHeight + "px";
    el.style.opacity = "1";
};

const leave = (el) => {
    el.style.height = el.scrollHeight + "px";
    el.style.opacity = "1";
    el.offsetHeight;
    el.style.transition = "height 0.3s ease, opacity 0.3s ease";
    el.style.height = "0";
    el.style.opacity = "0";
};
</script>

<template>
    <ul>
        <li class="menu-item" :key="index">
            <div
                v-if="items"
                role="button"
                class="flex items-center gap-3 select-none px-3 py-2 hover:bg-lightBlueHover"
                @click="toggleSubMenu(index)"
            >
                <div class="flex-none w-5">
                    <slot name="icon" />
                </div>
                <p class="flex-auto text-nowrap">
                    {{ title }}
                </p>
                <ArrowDownIcon
                    :class="{ 'rotate-180': activeIndex === index }"
                    class="transition-all"
                    :size="22"
                    color="black"
                />
            </div>
            <div v-else>
                <Link
                    :href="href"
                    class="flex items-center gap-3 select-none px-3 py-2 hover:bg-lightBlueHover"
                >
                    <div class="flex-none w-5">
                        <slot name="icon" />
                    </div>
                    <p class="flex-auto text-nowrap">
                        {{ title }}
                    </p>
                </Link>
            </div>
            <transition name="expand-collapse" @enter="enter" @leave="leave">
                <ul v-show="activeIndex === index" class="sub-menu ps-8 pb-0">
                    <SubMenuItem
                        v-for="(item, subIndex) in items"
                        :title="item.title"
                        :href="item.href"
                        :sub-index="subIndex"
                    />
                </ul>
            </transition>
        </li>
    </ul>
</template>

<style scoped>
.expand-collapse-enter-active,
.expand-collapse-leave-active {
    overflow: hidden;
}
.expand-collapse-enter,
.expand-collapse-leave-to {
    height: 0;
    opacity: 0;
}
.expand-collapse-enter-to,
.expand-collapse-leave {
    height: auto;
    opacity: 1;
}
</style>
