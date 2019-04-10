@extends('master')

@section('content')
    <div id="app">
        <div>

            <header class="app-header mb-16">
                <div class='header-top'>
                    <h1><img src="/images/laracasts.svg" alt="Laracasts"></h1>
                    <a href="#">Sign In</a>
                </div>

                <nav>
                    <a :href="laracast_url" target="_blank">Series Episode List</a>
                    <a href="#">Catalog</a>
                    <a href="#">Series</a>
                    <a href="#">Podcast</a>
                    <a href="#">Discussions</a>
                </nav>
            </header>

            <main class="flex mx-8">
                <aside class="sidebar w-1/5">
                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-3">Episodes</h5>

                        <ul class="list-reset">
                            <li class="text-sm leading-40">
                                <router-link to="/">Episode 1 and 2</router-link>
                            </li>
                            <li class="text-sm leading-40">
                                <router-link to="/episode-3">Episode 3</router-link>
                            </li>
                        </ul>
                    </section>
                </aside>

                <div class="primary flex-1">
                    <router-view></router-view>
                </div>
            </main>

        </div>
    </div>
@endsection