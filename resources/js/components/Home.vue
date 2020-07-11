<template>
  <div class="container">
    <div class="pyro">
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
export default {
  data: () => ({
    timer: {
      secs: 0,
      mins: 0,
      hours: 0,
      days: 0,
      int: true,
      name: 'Timer',
      interval: null
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
      this.timer.interval = setInterval(this.tick, 1000)
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
        clearInterval(this.timer.interval)
        this.timer.interval = setInterval(this.blink, 400)
      }
    },
    blink: function () {
      this.timer.int = !this.timer.int
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
    this.startTimer(0, 5, 0, 2)
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

      .time-box {
        margin: 0 10px;

        .name {
          font-size: 20px;
        }
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
  }

  .pyro > .before, .pyro > .after {
    position: absolute;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    box-shadow: $box-shadow2;
    @include animation((1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards));
  }
      
  .pyro > .after {
    @include animation-delay((1.25s, 1.25s, 1.25s));
    @include animation-duration((1.25s, 1.25s, 6.25s));
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
