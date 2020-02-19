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
        source1: 'https://placekitten.com/1000/300',
        source2: '../assets/tokoll.png',
        topText1: 'xx',
        topText2: 'yy',

        midTitle: 'Moin Hannes',
        source3: '../assets/stollprotokoll.png',
        midText: 'Moin Stollos',

        source4: '../assets/st.png',
        bottomText: 'Kekse',
    }),
};
</script>