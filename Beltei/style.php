<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .right-column {
        overflow-y: scroll;
        height: 100vh;
    }

    .flexbox {
        display: flex;
    }

    .left-panel {
        position: sticky;
        /* Set the element to become sticky  */
        height: 100vh;
        width: 50%;
        background-color: whitesmoke;
        top: 0;
        /* Set the sticky positon top */
    }

    .right-panel {
        height: auto;
        width: 50%;
        background-color: white;
    }

    #menu {
        background-color: whitesmoke;
        font-family: 'Jost', sans-serif;
        border-radius: 10px;
    }

    .hover-1 {
        transition: transform 0.5s;
        color: black;
        font-family: 'Jost', sans-serif;
        padding-top: 15px;
    }

    .hover-1:hover {
        background-color: rgb(235, 235, 235);
        box-shadow: 0 8px 50px -20px;
        transform: scale(1.1);
        background-color: whitesmoke;

    }

    ul li a:hover {
        font-family: 'Jost', sans-serif;
        color: black;
    }
</style>