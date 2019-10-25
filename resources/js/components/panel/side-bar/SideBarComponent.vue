<template>
    <v-card
            max-width="500"
            class="mx-auto"
            height="100%"
    >
        <v-toolbar
                color="teal"
                dark
        >
            <v-app-bar-nav-icon></v-app-bar-nav-icon>

            <v-toolbar-title>Topics</v-toolbar-title>

            <v-spacer></v-spacer>

            <v-btn icon>
                <v-icon>mdi-dots-vertical</v-icon>
            </v-btn>
        </v-toolbar>

        <v-list>
            <v-list-item-group>
                <v-list-group
                        v-for="item in items"
                        :key="item.title"
                        no-action
                        v-if="item.subMenu.length"
                >
                    <template v-slot:activator>
                        <v-list-item-content>
                            <v-list-item-title v-text="item.title"></v-list-item-title>
                        </v-list-item-content>
                    </template>
                    <v-list-item
                            v-for="subItem in item.subMenu"
                            :key="subItem.title"
                            @click=""
                    >
                        <v-list-item-content class="sub-menu">
                            <v-list-item-title v-text="subItem.title"></v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-list-group>
                <v-list-item
                        :key="item.title"
                        @click=""
                        v-else
                >
                    <v-list-item-content>
                        <v-list-item-title
                                v-text="item.title"
                        ></v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list-item-group>
        </v-list>
    </v-card>
</template>

<script>
    export default {
        data() {
            return {
                items: [],
                item: {
                    id: '',
                    parentId: '',
                    title: '',
                    icon: '',
                    uri: '',
                    subMenu: []
                },
            }
        },
        created() {
            this.fetchSideMenu();
        },

        methods: {
            fetchSideMenu() {
                this.$store.commit('loadingState', true);
                fetch('/ajax/side-menu', {
                    method: 'post'
                })
                    .then(res => res.json())
                    .then(res => {
                        this.items = res.data;
                        this.$store.commit('loadingState', false);
                    })
                    .catch(err => (console.log(err)))
            },
        }
    }
</script>

<style scoped>
    .v-card {
        position: absolute;
        left: 0;
    }

    .sub-menu {
        padding-left: 15px;
    }
</style>