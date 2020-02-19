<template>
    <div>
        <div>
            <h4>{{topTitle}}</h4>
            <b-card-group deck>
                <b-card :img-src="source1" img-alt="Card image" img-top>
                    <b-card-text>{{topText1}}</b-card-text>
                </b-card>

                <b-card :img-src="source2" img-alt="Card image" img-bottom>
                    <b-card-text>{{topText2}}</b-card-text>
                </b-card>
            </b-card-group>
        </div>
        <div class="mt-4">
            <h4>{{midTitle}}</h4>
            <b-card :img-src="source3" img-alt="Card image" img-left class="mb-3">
                <b-card-text>{{midText}}</b-card-text>
            </b-card>

            <b-card :img-src="source4" img-alt="Card image" img-right>
                <b-card-text>{{bottomText}}</b-card-text>
            </b-card>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        topTitle: String,
        source1: String,
        source2: String,
        topText1: String,
        topText2: String,
        midTitle: String,
        source2: String,
        midText: String,
        source3: String,
        bottomText: String,
    },
};
</script>