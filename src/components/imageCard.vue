<template>
    <div v-if="source">
        <b-card
            overlay
            :img-src="source"
            img-alt="Card Image"
            text-variant="white"
            :title="title"
            :sub-title="subtitle"
        >
            <b-card-text>
                {{ text }}
            </b-card-text>
        </b-card>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        source: String,
        subtitle: String,
        text: String,
    },
};
</script>
