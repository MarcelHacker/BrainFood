<template>
    <div class="container">
        <b-card bg-variant="light">
            <b-form @submit="onSubmit" v-if="show">
                <b-form-group label="Username">
                    <b-form-input
                        v-model="form.username"
                        type="text"
                        required
                        placeholder="Username"
                    ></b-form-input>
                </b-form-group>

                <b-form-group label="Firstname">
                    <b-form-input
                        v-model="form.firstName"
                        type="text"
                        required
                        placeholder="Firstname"
                    ></b-form-input>
                </b-form-group>

                <b-form-group label="Lastname">
                    <b-form-input
                        v-model="form.lastName"
                        type="text"
                        required
                        placeholder="Lastname"
                    ></b-form-input>
                </b-form-group>

                <b-form-group label="Date of birth">
                    <b-form-input
                        v-model="form.birthdate"
                        type="date"
                        required
                        placeholder="Date of birth"
                    ></b-form-input>
                </b-form-group>

                <b-form-group label="Email">
                    <b-form-input v-model="form.email" type="email" required placeholder="Email"></b-form-input>
                </b-form-group>

                <b-form-group inline label="Street">
                    <b-input-group class="mb-2">
                        <b-form-input
                            v-model="form.street"
                            type="text"
                            required
                            placeholder="Street"
                        ></b-form-input>
                        <b-form-input
                            v-model="form.housenumber"
                            type="number"
                            required
                            placeholder="House Nr."
                            class="col-sm-3"
                        ></b-form-input>
                    </b-input-group>
                </b-form-group>

                <b-form-group inline label="City">
                    <b-input-group class="mb-2">
                        <b-form-input v-model="form.city" type="text" required placeholder="City"></b-form-input>
                        <b-form-input
                            v-model="form.postCode"
                            type="number"
                            required
                            placeholder="Post code"
                            class="col-sm-3"
                        ></b-form-input>
                    </b-input-group>
                </b-form-group>

                <b-form-group label="Country">
                    <b-form-input v-model="form.country" type="text" required placeholder="Country"></b-form-input>
                </b-form-group>

                <b-form-group label="Password">
                    <b-form-input
                        v-model="form.password"
                        type="password"
                        required
                        placeholder="Password"
                    ></b-form-input>
                </b-form-group>

                <b-form-group label="Confirm Password">
                    <b-form-input
                        v-model="form.confirmPassword"
                        type="password"
                        required
                        placeholder="Confirm Password"
                    ></b-form-input>
                </b-form-group>

                <b-button type="submit" variant="primary">Submit</b-button>
            </b-form>
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
            firstName: null,
            lastName: null,
            email: null,
            birthdate: null,
            street: null,
            houseNumber: null,
            city: null,
            postCode: null,
            country: null,
            password: null,
            confirmPassword: null,
        },
    }),
    methods: {
        onSubmit() {
            this.$emit('submit', this.form);
        },
    },
};
</script>