<script setup>
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    title: Array
});

const isLastItem = (index) => {
    return index === props.breadcrumbs.length - 1;
};

</script>

<template>
    <nav aria-label="Breadcrumb">
        <ul class="breadcrumbs">
            <li v-for="(crumb, index) in title" :key="index" class="inline-block mr-3">
                <Link :href="route(crumb.link)" v-if="crumb.link && crumb.link !== '#' "
                      class="font-bold text-lg text-primaryColor"
                      :class="{
                         'active-link': isLastItem(index) & breadcrumbs.length !== 1,
                         'no-pointer-events': isLastItem(index),
                       }">
                    {{ crumb.label }}
                </Link>
                <a href="#" v-else
                   class="font-bold text-lg text-black"
                >
                    {{ crumb.label }}
                </a>
            </li>
        </ul>
    </nav>
</template>

<style>
.breadcrumbs {
    list-style: none;
    padding: 0;
    transition: color;
}

.breadcrumbs li::after {
    content: '/';
    margin-left: 10px;
    color: #6e6e6e;
}

.breadcrumbs li:last-child::after {
    content: '';
}

.breadcrumbs a:hover {
    color: var(--primary-color);
}

.breadcrumbs a.no-pointer-events {
    pointer-events: none;
    cursor: default;
}

.breadcrumbs a.active-link {
    color: var(--primary-color);
    cursor: default;
    pointer-events: none;
}
</style>
