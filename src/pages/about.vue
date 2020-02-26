<template>
    <div>
        <navbar />
        <AboutCard
            :topTitle="topTitle"
            :source1="source1"
            :topText1="topText1"
            :topText2="topText2"
            :midTitle="midTitle"
            :source2="source2"
            :midText="midText"
            :source3="source3"
            :source4="source4"
            :bottomText="bottomText"
        />/>
    </div>
</template>

<script>
import { AboutCard, Navbar } from './../components';

export default {
    components: {
        AboutCard,
        Navbar,
    },
    data: () => ({
        //TODO Insert Text
        topTitle: 'Über uns',
        source1: 'https://placekitten.com/1000/300',
        source2: '../assets/about/foodchain.png',
        topText1: 'Unsere Verkaufskette',
        topText2:
            'Alle unsere Produkte sind mit einem besonderen Gütesiegel versehen',

        midTitle: 'Moin Hannes',
        source3: '../assets/about/nachhaltig.jpg',
        midText: 'Unsere Produkte haben so gut wie keine Foodmiles',

        source4: '../assets/about/farmer.jpg',
        bottomText: 'Wir unterschtützen lokale Bauern',
    }),
};
</script>