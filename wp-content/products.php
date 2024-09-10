<section class="wrapper">
<!-- <div class="top">Products</div> -->
<!-- <div class="bottom">Products</div> -->
<p>For products section please visit marketplace page of this website!</p>
    <div class="top">Marketplace</div>
    <div class="bottom" aria-hidden="true">Marketplace</div>
</section>

<style>
    * {
        box-sizing: border-box;
    }

    :root {
        --background-color: black;
        --text-color: hsl(0, 0%, 100%);
        --green: green;
        --background: rgb(221, 221, 221);
        --text: rgb(0, 54, 99);
        --greenlight: rgb(108, 192, 112);
        --orange: rgb(255, 102, 51);
    }

    body {
        margin: 0;
    }

    .wrapper {
        display: grid;
        place-content: center;
        background-color: var(--background-color);
        min-height: 100vh;
        font-family: "Oswald", sans-serif;
        font-size: clamp(1.5rem, 1rem + 18vw, 15rem);
        font-weight: 700;
        text-transform: uppercase;
        color: var(--greenlight);
    }
    .wrapper1 {
        display: grid;
        place-content: center;
        margin-left: 250px;
        margin-top: -350px;
        /* background-color: var(--background-color); */
        /* min-height: 100vh; */
        font-family: "Oswald", sans-serif;
        font-size: clamp(1.5rem, 1rem + 18vw, 15rem);
        font-weight: 1000;
        text-transform: uppercase;
        color: var(--greenlight);
    }
    .wrapper p {
        font-size: small;
        color: var(--orange);
    }
    .wrapper1 p {
        font-size: small;
        color: var(--orange);
    }

    .wrapper>div {
        grid-area: 1/1/-1/-1;
    }
    .wrapper1>div {
        grid-area: 1/1/-1/-1;
    }

    .top {
        clip-path: polygon(0% 0%, 100% 0%, 100% 48%, 0% 58%);
    }

    .bottom {
        clip-path: polygon(0% 60%, 100% 50%, 100% 100%, 0% 100%);
        color: transparent;
        background: -webkit-linear-gradient(177deg, black 53%, var(--text-color) 65%);
        background: linear-gradient(177deg, black 53%, var(--orange) 65%);
        background-clip: text;
        -webkit-background-clip: text;
        transform: translateX(-0.02em);
    }
</style>