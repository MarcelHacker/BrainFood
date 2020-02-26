<template>
    <div>
        <navbar />
        <div class="row-sm-12">
            <div class="col-sm-8 offset-sm-2">
                <products :products="products" />
            </div>
            <div class="col-sm-8 offset-sm-2">
                <products :products="products" />
            </div>
            <div class="col-sm-8 offset-sm-2">
                <products :products="products" />
            </div>
        </div>
    </div>
</template>

<script>
import { Products, Navbar } from './../components';

export default {
    components: {
        Products,
        Navbar,
    },
    data: () => ({
        products: [
            {
                title: 'Tomatoes',
                source: '../assets/products/tomaten.png',
                text: 'Fresh tomatoes from Brasil', // Short description
                description: 'Fresh tomatoes 100g from Brasil farmes', // Long detailed description
            },
            {
                title: 'Cucumber',
                source: '../assets/products/xy.png',
                text: 'Fresh Cucumbers from Brasil', // Short description
                description: 'Fresh Cucumbers 100g from Brasil farmes', // Long detailed description
            },
            {
                title: 'Gurken',
                source: '../assets/products/gurken.png',
                text: 'Fresh Gurks from Tschechien', // Short description
                description: 'Fresh Gukrs 100g from Tschechien farmes', // Long detailed description
            },
        ],
        // TODO: PHP products connetion, Hinzufügen der PHP daten zu products array
    }),
};
</script>