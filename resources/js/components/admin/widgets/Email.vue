<template>
    <v-card
        class="mx-auto"
        elevation="2"
        outlined
    >
      <v-list-item three-line>
            <v-list-item-content>
                <div class="overline mb-4">
                  Send Email
                </div>
                <v-form
                    ref="form"
                    v-model="valid"
                    lazy-validation
                >
                    <v-checkbox
                      v-model="useEmailList"
                      label="Do you want use a user's list?"
                      :value="useEmailList"
                    ></v-checkbox>

                    <v-text-field
                        outlined
                        v-model="name"
                        :rules="nameRules"
                        label="Subject"
                        required
                    ></v-text-field>

                    <v-text-field
                      v-if="!useEmailList"
                      v-model="email"
                      :rules="emailRules"
                      label="E-mail"
                      outlined
                      required
                    ></v-text-field>

                    <v-select
                      v-else
                      :items="items"
                      label="Outlined style"
                      outlined
                    ></v-select>

                    <v-textarea
                      outlined
                      name="input-7-4"
                      label="Message"
                      value="The Woodman set to work at once, and so sharp was his axe that the tree was soon chopped nearly through."
                    ></v-textarea>

                    <v-btn
                      :disabled="!valid"
                      color="success"
                      class="mr-4"
                      @click="validate"
                    >
                      <v-icon
                        left
                      >
                        mdi-send
                      </v-icon>
                      Send Email
                    </v-btn>

                    <v-btn
                        color="warning"
                        class="mr-4"
                        @click="reset"
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
    useEmailList: true,
    name: '',
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
