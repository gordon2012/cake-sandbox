<style>
    body {
        background: whitesmoke;
    }

    h1 {
        padding-top: 15px;
    }

    section {
        display: flex;
        justify-content: center;
    }

    .frame {
        flex-basis: 1000px;
    }

    .work {
        display: flex;
        flex-flow: row wrap;
    }

    .work-item {
        flex-basis: 50%;
    }
    @media(max-width: 767px) {
        .work-item {
            flex-basis: 100%;
        }
    }

    .work-item-inner {
        height: 300px;
        background: white;
        box-shadow: 1px 1px 8px 0px rgba(0,0,0,0.75);
        margin: 30px;
        display: flex;
        flex-direction: column;
    }

    .work-item-inner > div {
        flex: 1;
    }
    .work-item-top {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h2 {
        color: white;
        text-shadow: 1px 1px 8px #000,
                     1px -1px 8px #000,
                    -1px 1px 8px #000,
                    -1px -1px 8px #000;
    }
</style>

<div id="app">
    <section>
        <div class="frame">
            <h1>My Puppies</h1>
            <div class="work">
                <work-item 
                    v-for="item in workItems"
                    v-bind:work="item"
                    v-bind:key="item.id">
                </work-item>
            </div>
            <button>See More Puppy Action</button>
        </div>
    </section>
</div>

<script>
    Vue.component('work-item', {
        props: ['work'],
        template: `
            <div class="work-item">
                <div class="work-item-inner">
                    <div class="work-item-top" :style="{ backgroundImage: work.img }">
                        <h2>{{ work.text }}</h2>
                    </div>
                    <div class="work-item-bottom">
                        <div style="padding: 15px">
                            <p>{{ work.copy }}</p>
                        </div>
                    </div>
                    
                </div>
            </div>`
    });

    var app = new Vue({
        el: '#app',
        data: {
            workItems: [
                { id: 0, text: 'Sleepy Time', img: 'url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/303256/20170315_074622.jpg)', copy: 'Lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum. Lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum. Lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum.' },
                { id: 1, text: 'Puppy Love', img: 'url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/303256/20161130_220314.jpg)', copy: 'Lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum.' },
                { id: 2, text: 'Epic Battle', img: 'url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/303256/20161206_163059.jpg)', copy: 'Lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum.' },
                { id: 2, text: 'Just Chilling', img: 'url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/303256/20161005_145148.jpg)', copy: 'Lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum.' }
            ]
        }
    });
</script>