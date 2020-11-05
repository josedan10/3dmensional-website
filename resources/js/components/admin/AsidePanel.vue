<template>
    <v-navigation-drawer
        permanent
        expand-on-hover
        class="side-bar"
    >
        <v-list>
            <v-list-item class="px-2">
                <v-list-item-avatar>
                    <v-img src="/images/jose-profile.jpg"></v-img>
                </v-list-item-avatar>
            </v-list-item>

            <v-list-item link>
                <v-list-item-content>
                    <v-list-item-title class="title">
                        José Quintero
                    </v-list-item-title>
                    <v-list-item-subtitle>Chief Technology Officer</v-list-item-subtitle>
                </v-list-item-content>
            </v-list-item>
        </v-list>

        <v-divider></v-divider>

        <v-list
            nav
            dense
            subheader
        >
            <v-subheader inset>Company</v-subheader>
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-account-multiple</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Users</v-list-item-title>
            </v-list-item>
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-briefcase</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Projects</v-list-item-title>
            </v-list-item>
            <v-list-item link>
                <v-list-item-icon>
                    <v-badge
                        color="indigo accent-4"
                        content="6"
                    >
                        <v-icon>mdi-calendar</v-icon>
                    </v-badge>
                </v-list-item-icon>
                <v-list-item-title>
                    Calendar
                </v-list-item-title>
            </v-list-item>
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-account-star</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Clients</v-list-item-title>
            </v-list-item>
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-package-variant</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Packages</v-list-item-title>
            </v-list-item>

            <v-divider></v-divider>

            <v-subheader inset>Website</v-subheader>
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-file-edit</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Content</v-list-item-title>
            </v-list-item>
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-search-web</v-icon>
                </v-list-item-icon>
                <v-list-item-title>SEO</v-list-item-title>
            </v-list-item>
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-link</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Links</v-list-item-title>
            </v-list-item>

            <v-divider></v-divider>

            <v-subheader inset>Contact</v-subheader>
            <v-list-item link>
                <v-list-item-icon>
                    <v-badge
                        color="indigo accent-4"
                        content="10"
                    >
                        <v-icon>mdi-message</v-icon>
                    </v-badge>
                </v-list-item-icon>
                <v-list-item-title>
                    Messages
                </v-list-item-title>
            </v-list-item>
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-robot</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Bots</v-list-item-title>
            </v-list-item>

            <v-divider></v-divider>

            <v-subheader inset>Visualization</v-subheader>
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-chart-bar</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Stats</v-list-item-title>
            </v-list-item>
            <v-list-item link>
                <v-list-item-icon>
                    <v-icon>mdi-widgets</v-icon>
                </v-list-item-icon>
                <v-list-item-title>Widgets</v-list-item-title>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
export default {
  data: () => ({})
}
</script>

<style lang="scss">
    .side-bar {
        position: absolute;
        border-right: 1px solid #E0E0E0;
        z-index: 500;
    }
</style>
