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
        topTitle: 'Über uns',
        source1:
            'https://4.bp.blogspot.com/-jbzZ72-IjXY/XBlh9xNnDUI/AAAAAAAAOk8/zcke1DkSUrk1hhDd1FBwlw9hC4DsB4H6QCLcBGAs/s1600/Duurzame.jpg',
        source2:
            'https://cdn.prod.www.spiegel.de/images/a514013a-0001-0004-0000-000001303769_w948_r1.77_fpx32.67_fpy55.01.jpg',
        topText1: 'Unsere Verkaufskette',
        topText2:
            'Alle unsere Produkte sind mit einem besonderen Gütesiegel versehen',

        midTitle: 'Moin Hannes',
        source3:
            'https://www.ecowoman.de/images/stories/Bauen_und_Wohnen/so_nachhaltig_sein_760.jpg',
        midText: 'Unsere Produkte haben so gut wie keine Foodmiles',

        source4:
            'https://landeszentrum-bw.de/site/machsmahl/get/5541373/clipdealer-A54578553-photo_jpg_s.jpg',
        bottomText: 'Wir unterschtützen lokale Bauern',
    }),
};
</script>