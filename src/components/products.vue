<template>
    <div v-show="products" class="d-flex flex-row justify-content-between">
        <b-card
            v-for="(item, index) in products"
            :key="index"
            :title="item.title"
            :img-src="item.source"
            :img-alt="item.title"
            img-top
            tag="product"
            class="mb-2"
        >
            <b-card-text>{{item.text}}</b-card-text>

            <!-- Modal -->
            <b-button v-b-modal.modal variant="primary" centered>Add to Cart</b-button>
            <b-modal id="modal" :title="item.title" @show="onModalShow" @ok="onModalOk">
                <template v-slot:modal-footer="{ ok, cancel }">
                    <b-button size="sm" variant="primary" @click="ok()">Add to Cart</b-button>
                    <b-button size="sm" variant="default" @click="cancel()">Cancel</b-button>
                </template>
                <p class="my-4">{{item.description}}</p>
                <b-input-group prepend="Amount" class="mb-2">
                    <b-form-input v-model="amount" type="number"></b-form-input>
                </b-input-group>
            </b-modal>

            <b-button
                :to="'/products/details/' + item.id"
                variant="outline-primary"
            >View Product Details</b-button>
        </b-card>
    </div>
</template>

<script>
import { Navbar } from './../components';

export default {
    components: { Navbar },
    props: {
        products: Array,
    },
    data: () => ({
        amount: null,
    }),
    methods: {
        onClick() {
            this.modal = true;
        },
        onModalShow() {
            this.amount = null;
        },
        onModalOk() {
            this.$emit('amount', this.amount);
        },
    },
};
</script>