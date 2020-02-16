<template>
    <div>
        <b-navbar toggleable="lg" type="dark" variant="info">
            <b-navbar-brand href="#">{{ brand }}</b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto">
                    <b-navbar-nav v-for="(item, idx) in items" :key="idx">
                        <b-nav-item :to="item.to">{{ item.label }}</b-nav-item>
                    </b-navbar-nav>
                    <b-nav-item-dropdown text="Lang" right>
                        <b-dropdown-item v-for="(item, idx) in languages" :key="idx">{{ item.lang }}</b-dropdown-item>
                    </b-nav-item-dropdown>

                    <b-nav-item-dropdown right>
                        <!-- Using 'button-content' slot -->
                        <template v-slot:button-content>
                            <em>User</em>
                        </template>
                        <b-dropdown-item :to="'/login'">Sign In</b-dropdown-item>
                        <b-dropdown-item :to="'/registration'">Sign Up</b-dropdown-item>
                        <!--  <b-dropdown-item>Profile</b-dropdown-item>
                        <b-dropdown-item href="#">Sign Out</b-dropdown-item>-->
                    </b-nav-item-dropdown>

                    <b-nav-form>
                        <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
                        <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
                    </b-nav-form>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
</template>

<script>
export default {
    data: () => ({}),
    props: {
        brand: {
            type: String,
            default: 'BrainFood',
        },
        items: {
            type: Array,
            default: () => [
                { label: 'Home', to: '/' },
                { label: 'Produkte', to: '/products' },
                { label: 'About', to: '/about' },
            ],
        },
        languages: {
            type: Array,
            default: () => [{ lang: 'EN' }, { lang: 'DE' }, { lang: 'CZ' }],
        },
    },
    methods: {},
};
</script>
