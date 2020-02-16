<template>
    <div>
        <navbar />

        <div class="row align-middle justify-content-md-center">
            <div class="col-sm-6">
                <login-form @submit="onSubmit" />
            </div>
        </div>
    </div>
</template>

<script>
import { LoginForm, Navbar } from './../components';

// TODO: Center vertically
export default {
    components: {
        LoginForm,
        Navbar,
    },
    methods: {
        onSubmit(formData) {
            // TODO: PHP database connetion
        },
    },
};
</script>