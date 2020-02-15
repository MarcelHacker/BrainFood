<template>
    <div>
        <b-card-group>
            <b-card :title="title" :img-src="source" img-alt="Image" img-top>
                <b-card-text>
                    {{ text }}
                </b-card-text>
                <template v-slot:footer>
                    <small class="text-muted">Updated: {{ new Date() }}</small>
                </template>
            </b-card>
        </b-card-group>
    </div>
</template>

<script>
export default {
    props: {
        title: String,
        source: String,
        text: String,
    },
};
</script>
