<template>
    <div>
        <navbar />
        <registration-form />
    </div>
</template>

<script>
import { RegistrationForm, Navbar } from './../components';

export default {
    components: {
        RegistrationForm,
        Navbar,
    },
    data: () => ({}),
};
</script>