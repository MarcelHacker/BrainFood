<template>
    <div>
        <navbar />
        <image-card
            :title="'Frisch'"
            :source="'https://picsum.photos/900/250/?image=3'"
            :subtitle="'Hah'"
            :text="
                'Voluptate magna ullamco irure exercitation duis est aute nisi ut. Esse incididunt tempor culpa et mollit elit sint labore pariatur dolore cillum irure ipsum culpa. Ex id eu mollit excepteur. Dolore aliqua veniam proident excepteur fugiat cillum non laboris aliqua ad sit aliquip.'
            "
        />
        <div></div>
    </div>
</template>

<script>
import { Card, ImageCard, Navbar } from './../components';

export default {
    components: { Navbar, ImageCard },
    data: () => ({ message: 'test', inputMessage: '' }),
    mounted() {
        // TODO: IMAGESOURCE
        console.log(this.message);
        this.message = 'HAHA';
        console.log(this.message);
    },
    /* watch: {
        message(newVal) {
            this.inputMessage = 'Changed inputMessage';
            console.log(this.inputMessage);
        },
    }, */
};
</script>
