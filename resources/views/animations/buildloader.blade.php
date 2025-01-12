<style>
    /* Preloader styles */
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        --s: 275px; /* control the size*/
        --c1: #b2b2b2;
        --c2: #ffffff;
        --c3: #d9d9d9;
        
        --_g: var(--c3) 0 120deg,#0000 0;
        background:
            conic-gradient(from -60deg at 50% calc(100%/3),var(--_g)),
            conic-gradient(from 120deg at 50% calc(200%/3),var(--_g)),
            conic-gradient(from  60deg at calc(200%/3),var(--c3) 60deg,var(--c2) 0 120deg,#0000 0),
            conic-gradient(from 180deg at calc(100%/3),var(--c1) 60deg,var(--_g)),
            linear-gradient(90deg,var(--c1)   calc(100%/6),var(--c2) 0 50%,
                                var(--c1) 0 calc(500%/6),var(--c2) 0);
        background-size: calc(1.732*var(--s)) var(--s);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #building {
      display: flex;
      width: 40em;
      height: 100vh;
      margin: auto;
    }
    #blocks {
      margin: auto;
    }
    #caption {
      padding-left: 0.5em;
      margin: auto;
      font-size: 4.75em;
      font-family: Unbounded, sans-serif;
      color: #666666;
    }
    .b {
      background: #b2b2b2;
      border: 0.1em groove #d9d9d9;
      width: 4.5em;
      height: 4.5em;
      border-radius: 0.5em;
      margin: 1em;
      position: relative;
      animation-duration: 1.2s;
      animation-iteration-count: infinite;
      animation-timing-function: linear;
    }
    #b1 {
      animation-name: b1;
    }
    #b2 {
      animation-name: b2;
      margin-left: 7.25em;
    }
    #b3 {
      animation-name: b3;
      margin-top: -6em;
    }
    #b4 {
      animation-name: b4;
      margin-left: 7.25em;
    }
    @keyframes b1 {
      0% {
        left: 0em;
        transform: rotate(0deg);
      }
      50% {
        left: 6.25em;
        bottom: 0em;
        transform: rotate(90deg);
      }
      100% {
        left: 6.25em;
        bottom: -6.125em;
        transform: rotate(90deg);
      }
    }
    @keyframes b2 {
      50% {
        bottom: 0em;
      }
      100% {
        bottom: -6.125em;
      }
    }
    @keyframes b3 {
      50% {
        top: 0em;
      }
      100% {
        top: -6.125em;
      }
    }
    @keyframes b4 {
      0% {
        left: 0em;
        transform: rotate(0deg);
      }
      50% {
        left: -6.25em;
        top: 0em;
        transform: rotate(90deg);
      }
      100% {
        left: -6.25em;
        top: -6.125em;
        transform: rotate(90deg);
      }
    }
    @media (max-width: 400px) {
      #building {
        width: 100%;
      }
      #caption {
        display: none;
      }
    }
</style>

<!-- Preloader -->
<div id="preloader">
  <div id="building" style="font-size: 12px">
    <div id="blocks">
      <div class="b" id="b1"></div>
      <div class="b" id="b2"></div>
      <div class="b" id="b3"></div>
      <div class="b" id="b4"></div>
    </div>
    <div id="caption">
        Proyectos esta casi listo...
    </div>
  </div>
</div>

<script>
  // Wait until the page is fully loaded
  window.addEventListener("load", function () {
    const preloader = document.getElementById("preloader");
    // Delay hiding the preloader
    setTimeout(() => {
      preloader.style.opacity = "0"; // Add fade-out effect
      setTimeout(() => {
        preloader.style.display = "none";
      }, 500); // Ensure it is hidden after fade-out
    }, 1000); // Delay of 1 second after page load
  });
</script>
