<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    span {
        font-family: 'Bebas Neue', cursive;
        font-size: 3em;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-image: linear-gradient(gold, gold);
        background-size: 100% 10px;
        background-repeat: no-repeat;
        background-position: 100% 0%;
        transition: background-size .7s, background-position .5s ease-in-out;
    }

    span:hover {
        background-size: 100% 100%;
        background-position: 0% 100%;
        transition: background-position .7s, background-size .5s ease-in-out;
    }
</style>
<span> I love to learn more! </span>