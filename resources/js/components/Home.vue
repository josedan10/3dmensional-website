<template>
    <div v-show="this.timer.int">
     {{ timer.days }}:{{ timer.hours }}:{{ timer.mins }}:{{ timer.secs }}
    </div>
</template>

<script>
export default {
  data: () => ({
    timer: {
      secs: 0,
      mins: 0,
      hours: 0,
      days: 0,
      int: true
    }
  }),
  methods: {
    StartTimer: function () {
      this.timer.days = 10
      setInterval(this.tick, 1000)
    },
    tick: function() {
      if (this.timer.days !== 0 && this.timer.hours == 0 && this.timer.mins == 0 && this.timer.secs == 0) {
        this.timer.days -= 1
        this.timer.hours = 23
        this.timer.mins = 59
        this.timer.secs = 59
      }
      else if (this.timer.secs !== 0) {
        this.timer.secs -= 1
      }
      else if (this.timer.mins > 0 && this.timer.secs == 0) {
        this.timer.mins -= 1
        this.timer.secs = 59
      }
      else if (this.timer.hours > 0 && this.timer.mins == 0 && this.timer.secs == 0) {
        this.timer.hours -= 1 
        this.timer.mins = 59
        this.timer.secs = 59
      }
      else if (this.timer.days == 0 && this.timer.hours == 0 && this.timer.mins == 0 && this.timer.secs == 0) {
        this.timer.int = !this.timer.int
      }
    },
  },
  mounted () {
    this.StartTimer()
  },
}
</script>

<style lang="scss" scoped>

</style>
