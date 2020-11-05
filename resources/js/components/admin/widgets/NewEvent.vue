<template>
    <v-card
        class="mx-auto"
        elevation="2"
        outlined
    >
      <v-list-item three-line>
            <v-list-item-content>
                <div class="overline mb-4">
                  Create Event
                </div>
                <v-form
                    ref="form"
                    v-model="valid"
                    lazy-validation
                >
                    <v-text-field
                        v-model="email"
                        :rules="emailRules"
                        label="Event title"
                        required
                        outlined
                    ></v-text-field>
                    <v-row>
                        <v-col>
                            <v-menu
                                v-model="menuDate"
                                :close-on-content-click="false"
                                :nudge-right="40"
                                transition="scale-transition"
                                offset-y
                                min-width="290px"
                            >
                                <template v-slot:activator="{ on, attrs }">
                                    <v-text-field
                                        v-model="date"
                                        outlined
                                        label="Date"
                                        append-icon="mdi-calendar"
                                        readonly
                                        v-bind="attrs"
                                        v-on="on"
                                    ></v-text-field>
                                </template>
                                <v-date-picker
                                    v-model="date"
                                    @input="menuDate = false"
                                ></v-date-picker>
                            </v-menu>
                        </v-col>
                        <v-col>
                            <v-menu
                                ref="menuTime"
                                v-model="menuTime"
                                :close-on-content-click="false"
                                :nudge-right="40"
                                :return-value.sync="time"
                                transition="scale-transition"
                                offset-y
                                max-width="290px"
                                min-width="290px"
                            >
                                <template v-slot:activator="{ on, attrs }">
                                    <v-text-field
                                        v-model="time"
                                        label="Time"
                                        append-icon="mdi-clock-outline"
                                        readonly
                                        outlined
                                        v-bind="attrs"
                                        v-on="on"
                                    ></v-text-field>
                                </template>
                                <v-time-picker
                                    v-if="menuTime"
                                    v-model="time"
                                    format="ampm"
                                    scrollable
                                    full-width
                                    @click:minute="$refs.menuTime.save(time)"
                                ></v-time-picker>
                            </v-menu>
                        </v-col>
                    </v-row>

                    <v-textarea
                      outlined
                      name="input-7-4"
                      label="Description"
                      value=""
                    ></v-textarea>

                    <v-btn
                        class="mr-2"
                        color="success"
                    >
                        <v-icon
                            left
                        >
                            mdi-plus
                        </v-icon>
                        Create Event
                    </v-btn>

                    <v-btn
                        color="warning"
                        class="mr-4"
                    >
                        <v-icon
                            left
                        >
                            mdi-delete
                        </v-icon>
                        Reset
                    </v-btn>
                </v-form>
            </v-list-item-content>
        </v-list-item>
    </v-card>
</template>

<script>
export default {
  data: () => ({
    valid: true,
    date: new Date().toISOString().substr(0, 10),
    time: null,
    name: '',
    menuDate: false,
    menuTime: false,
    nameRules: [
      v => !!v || 'Name is required',
      v => (v && v.length <= 10) || 'Name must be less than 10 characters'
    ],
    email: '',
    emailRules: [
      v => !!v || 'E-mail is required',
      v => /.+@.+\..+/.test(v) || 'E-mail must be valid'
    ],
    select: null,
    items: [
      'Item 1',
      'Item 2',
      'Item 3',
      'Item 4'
    ],
    checkbox: false
  }),

  methods: {
    validate () {
      this.$refs.form.validate()
    },
    reset () {
      this.$refs.form.reset()
    },
    resetValidation () {
      this.$refs.form.resetValidation()
    }
  }
}
</script>
