<template>
  <div class="container">
    <div class="pyro" :class="{active:!timer.isRunning}">
      <div class="before"></div>
      <div class="after"></div>
    </div>
    <div class="timer" v-show= "timer.int">
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
  </div>
</template>

<script>
import moment from 'moment-timezone'

export default {
  data: () => ({
    timer: {
      secs: 0,
      mins: 0,
      hours: 0,
      days: 0,
      int: true,
      endDate: null,
      interval: null,
      isRunning: false
    }
  }),
  methods: {
    startTimer: function (endDate) {
      // Set initial state of timer
      this.timer = {
        ...this.timer,
        endDate,
        isRunning: true
      }

      // Start tick
      this.timer.interval = setInterval(this.tick, 1000)
    },
    tick: function () {
      const now = moment().tz('America/Caracas')
      const timeDiffSecs = this.timer.endDate.diff(now, 'secs')

      if (timeDiffSecs > 0) {
        this.timer = {
          ...this.timer,
          days: this.timer.endDate.diff(now, 'days'),
          hours: this.timer.endDate.diff(now, 'hours') % 24,
          mins: this.timer.endDate.diff(now, 'minutes') % 60,
          secs: this.timer.endDate.diff(now, 'seconds') % 60
        }
      } else {
        // Blink
        this.timer.isRunning = false
        clearInterval(this.timer.interval)
        this.timer.interval = setInterval(this.blink, 400)
      }
    },
    blink: function () {
      this.timer.int = !this.timer.int
    },
    prettierTime: (digit) => digit < 10 ? '0' + digit : digit
  },
  mounted () {
    this.startTimer(moment('2020-08-10 20:00').tz('America/Caracas'))
  }
}
</script>

<style lang="scss">
  .container {
    width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden;

    .timer {
      display: flex;
      font-size: 40px;
      position: absolute;
      margin: auto;
      margin-top: 200px;

      .time-box {
        margin: 0 10px;

        .name {
          font-size: 20px;
        }
      }

      @media (max-width: 576px) {
        margin-top: 0;
        bottom: 20px;
      }
    }
  }

  $particles: 50;
  $width: 500;
  $height: 500;
  // Create the explosion...
  $box-shadow: ();
  $box-shadow2: ();
  @for $i from 0 through $particles {
    $box-shadow: $box-shadow,
      random($width)-$width / 2 + px
      random($height)-$height / 1.2 + px
      hsl(random(360), 100, 50);
    $box-shadow2: $box-shadow2, 0 0 #fff
  }
  @mixin keyframes ($animationName) {
      @-webkit-keyframes #{$animationName} {
          @content;
      }

      @-moz-keyframes #{$animationName} {
          @content;
      }

      @-o-keyframes #{$animationName} {
          @content;
      }

      @-ms-keyframes #{$animationName} {
          @content;
      }

      @keyframes #{$animationName} {
          @content;
      }
  }

  @mixin animation-delay ($settings) {
      -moz-animation-delay: $settings;
      -webkit-animation-delay: $settings;
      -o-animation-delay: $settings;
      -ms-animation-delay: $settings;
      animation-delay: $settings;
  }

  @mixin animation-duration ($settings) {
      -moz-animation-duration: $settings;
      -webkit-animation-duration: $settings;
      -o-animation-duration: $settings;
      -ms-animation-duration: $settings;
      animation-duration: $settings;
  }

  @mixin animation ($settings) {
      -moz-animation: $settings;
      -webkit-animation: $settings;
      -o-animation: $settings;
      -ms-animation: $settings;
      animation: $settings;
  }

  @mixin transform ($settings) {
      transform: $settings;
      -moz-transform: $settings;
      -webkit-transform: $settings;
      -o-transform: $settings;
      -ms-transform: $settings;
  }
  .pyro {
    width: 100vw;
    height: 100vh;
    opacity: 0;
    transition: opacity 1s ease;

    &.active {
      opacity: 1;
      transition: opacity 1s ease;

      &>.before,
      &> .after {
        position: absolute;
        width: 5px;
        height: 5px;
        border-radius: 50%;
        box-shadow: $box-shadow2;
        @include animation((1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards));
      }

      &> .after {
        @include animation-delay((1.25s, 1.25s, 1.25s));
        @include animation-duration((1.25s, 1.25s, 6.25s));
      }
    }
  }

  @include keyframes(bang) {
    to {
      box-shadow:$box-shadow;
    }
  }

  @include keyframes(gravity)  {
    to {
      @include transform(translateY(200px));
      opacity: 0;
    }
  }

  @include keyframes(position) {
    0%, 19.9% {
      margin-top: 10%;
      margin-left: 40%;
    }
    20%, 39.9% {
      margin-top: 40%;
      margin-left: 30%;
    }
    40%, 59.9% {
      margin-top: 20%;
      margin-left: 70%
    }
    60%, 79.9% {
      margin-top: 30%;
      margin-left: 20%;
    }
    80%, 99.9% {
      margin-top: 30%;
      margin-left: 80%;
    }
  }
</style>
