<template>
    <v-card
        class="mx-auto"
        elevation="2"
        outlined
    >
        <v-container fluid>
            <div class="text-overline">Last Instagram Post</div>
            <v-row>
                <v-col>
                    <v-img
                        lazy-src="https://picsum.photos/id/11/10/6"
                        src="https://picsum.photos/id/11/500/300"
                    ></v-img>
                </v-col>
                <v-col>
                    <div class="flex-column">
                        <v-list flat>
                            <v-subheader>Stats</v-subheader>
                            <v-list-item-group
                                color="primary"
                            >
                                <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon>mdi-heart</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title>97 Likes</v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>
                                <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon>mdi-comment-text</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title>24 Comments</v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>
                                <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon>mdi-send</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title>5 Directs</v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>
                                <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon>mdi-account</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title>10 Profile visits</v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>
                                <v-list-item>
                                    <v-list-item-icon>
                                        <v-icon>mdi-target</v-icon>
                                    </v-list-item-icon>
                                    <v-list-item-content>
                                        <v-list-item-title>2567 Accounts reached</v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>
                            </v-list-item-group>
                        </v-list>
                    </div>
                </v-col>
            </v-row>
        </v-container>
    </v-card>
</template>

<script>
export default {
    data: () => ({})
}
</script>

<style scoped lang="scss">
    .v-card,
    .container,
    .row,
    .col {
        min-height: 100%;
        position: relative;
    }
</style>
