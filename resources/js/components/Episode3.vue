<template>

    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-4">Episode 3</h1>

        <div class="card-container flex items-center justify-center">

            <div class="card flex rounded-10px">
                <!--left-->
                <div class="card-left flex flex-col text-center justify-between items-center w-1/3 rounded-10px">
                    <a href="#" class="card-skill-button">PHP</a>
                    <img src="https://laracasts.com/images/series/2018/testing-jargon.svg" alt="">
                    <span class="card-difficulty text-white text-sm leading-tight">Intermediate Difficulty</span>
                </div>
                <!--right-->
                <div class="card-right text-grey-darker flex flex-col w-2/3">

                    <h3><a href="#" class="card-title text-2xl font-medium leading-zero">Testing Jargon</a></h3>
                    <p class="card-excerpt flex-1">
                        There's no two ways about it: terminology in the testing world is incredibly overwhelming.
                        Let's fix that! But by bit, we'll break all of these confusing concepts down as best as we can.
                    </p>
                    <div class="card-meta flex text-sm">
                        <div class="flex">
                            <img src="/images/book.svg" alt="">
                            5 lessons
                        </div>

                        <div class="flex">
                            <img src="/images/clock.svg" alt="">
                            53:10 min
                        </div>
                    </div>

                </div>
            </div>

        </div>



    </div>

</template>

<script>
    export default {}
</script>

<style scoped lang="scss">

    .card-container {
        height: 500px;
    }
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08);
        width: 475px;
        height: 258px;
    }

    .card-left {
        padding: 1em;
        background: linear-gradient(to bottom, #21c8f6, #637bff);
        color: white;

        flex-grow: 2;
    }
    .card-skill-button {
        background: rgba(0, 0, 0, .3);
        color: inherit;
        text-decoration: none;
        font-size: .7rem;
        padding:  3px 25px;
        border-radius: 9999px;
    }
    .card-right {
        padding: 1em;
        h3 {
            margin-bottom: 1em;
        }
    }
    .card-meta {
        & > div {
            margin-right: 1em;
        }
        & img {
            margin-right: .5rem;
        }
    }

</style>