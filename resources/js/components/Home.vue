<template>
    <div class="timer" v-show="timer.int">
      <div class="time-box">
        <div class="time">{{ prettierTime(timer.days) }}</div>
        <div class="name">Days</div>
      </div>
      :
      <div class="time-box">
        <div class="time">{{ prettierTime(timer.hours) }}</div>
        <div class="name">Hours</div>
      </div>
      :
      <div class="time-box">
        <div class="time">{{ prettierTime(timer.mins) }}</div>
        <div class="name">Minutes</div>
      </div>
      :
      <div class="time-box">
        <div class="time">{{ prettierTime(timer.secs) }}</div>
        <div class="name">Seconds</div>
      </div>
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
      int: true,
      name: 'Timer'
    }
  }),
  methods: {
    startTimer: function (days, hours, mins, secs) {
      // Set initial state of timer
      this.timer = {
        ...this.timer,
        days,
        hours,
        mins,
        secs
      }

      // Start tick
      setInterval(this.tick, 1000)
    },
    tick: function () {
      if (this.timer.secs !== 0) {
        this.reduceSecs()
      } else if (this.timer.mins > 0 && this.timer.secs === 0) {
        this.reduceMins()
      } else if (this.timer.hours > 0 && this.timer.mins === 0 && this.timer.secs === 0) {
        this.reduceHours()
      } else if (this.timer.days !== 0 && this.timer.hours === 0 && this.timer.mins === 0 && this.timer.secs === 0) {
        this.reduceDays()
      } else {
        // Blink
        this.timer.int = !this.timer.int
      }
    },
    prettierTime: (digit) => digit < 10 ? '0' + digit : digit,
    reduceSecs: function () {
      // Reduce secs
      this.timer.secs -= 1
    },
    reduceMins: function () {
      // Reduce mins
      this.timer.mins -= 1
      this.timer.secs = 59
    },
    reduceHours: function () {
      // Reduce hours
      this.timer.hours -= 1
      this.timer.mins = 59
      this.timer.secs = 59
    },
    reduceDays: function () {
      // Reduce days
      this.timer.days -= 1
      this.timer.hours = 23
      this.timer.mins = 59
      this.timer.secs = 59
    }
  },
  mounted () {
    this.startTimer(0, 9, 0, 12)
  }
}
</script>

<style lang="scss">
  .timer {
    display: flex;
    font-size: 40px;

    .time-box {
      margin: 0 10px;

      .name {
        font-size: 20px;
      }
    }
  }
</style>
