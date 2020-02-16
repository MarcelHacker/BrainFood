<template>
    <div class="container">
        <b-card>
            <b-form @submit="onSubmit" v-if="show">
                <b-form-group label="Username">
                    <b-form-input
                        v-model="form.username"
                        type="text"
                        required
                        placeholder="Username"
                    ></b-form-input>
                </b-form-group>

                <b-form-group label="Password">
                    <b-form-input
                        v-model="form.password"
                        type="password"
                        required
                        placeholder="Password"
                    ></b-form-input>
                </b-form-group>

                <b-button type="submit" variant="primary">Submit</b-button>
            </b-form>
            <span class="text-secondary">
                Do not have an account already?
                <b-link :to="'/registration'">Sign Up</b-link>
            </span>
        </b-card>
    </div>
</template>

<script>
export default {
    props: {
        show: {
            type: Boolean,
            default: true,
        },
    },
    data: () => ({
        form: {
            username: null,
            password: null,
        },
    }),
    methods: {
        onSubmit() {
            this.$emit('submit', this.form);
        },
    },
};
</script>