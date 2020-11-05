<template>
    <v-container class="dashboard container">
        <v-row>
            <v-col>
                <MessagesWidget
                    icon="telegram"
                    color="white"
                    background="blue"
                ></MessagesWidget>
            </v-col>
            <v-col>
                <CalendarWidget
                    icon="calendar"
                    color="white"
                    background="yellow accent-4"
                ></CalendarWidget>
            </v-col>
            <v-col>
                <MessagesWidget
                    icon="instagram"
                    color="white"
                    background="pink accent-2"
                ></MessagesWidget>
            </v-col>
        </v-row>
        <v-row>
            <v-col>
                <LastInstagramPostWidget></LastInstagramPostWidget>
            </v-col>
            <v-col>
                <EmailWidget></EmailWidget>
            </v-col>
            <v-col>
                <NewEventWidget></NewEventWidget>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import MessagesWidget from './widgets/Messages'
import CalendarWidget from './widgets/Calendar'
import EmailWidget from './widgets/Email'
import LastInstagramPostWidget from './widgets/LastInstagramPost'
import NewEventWidget from './widgets/NewEvent'

export default {
  components: {
    MessagesWidget,
    CalendarWidget,
    EmailWidget,
    LastInstagramPostWidget,
    NewEventWidget,
  },
  data: () => ({

  })
}
</script>

<style lang="scss">
    .dashboard {
        min-height: 100vh;
    }
</style>
