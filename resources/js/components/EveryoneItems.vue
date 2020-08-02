<template>
    <div>
        <!-- タイトル -->
        <div class="c-titleWrap u-mb__30">
            <h2 class="u-mb__10">{{ record.record_name }}</h2>
            <h3 class="u-mb__20">のきろく</h3>
            <p>こつこつ数：{{ items.length }}</p>
            <form action="/kotunote/everyone/user" method="GET" name="user">
                <input type="hidden" name="user_id" :value="record.user_id">
                <p>ユーザー名：
                    <a href="javascript:user.submit()" class="u-hover">{{ record.user.name }}</a>
                </p>
            </form>
        </div>

        <div class="p-container">
            <!-- ソート -->
            <ul v-if="years.length" class="u-dp__flex u-mb__30">
                <li v-on:click="clearSelectYear" class="u-mr__50">
                    <p class="u-c__blue u-hover">ぜんぶ</p>
                </li>
                <li v-for="(year,id) in years" :key="id" v-on:click="setSelectYear(year)" class="u-mr__50">
                    <p class="u-c__blue u-hover">{{ year }}</p>
                </li>
            </ul>

            <!-- きろくのいちらん -->
            <ul class="c-recordWrap">
                <li v-for="item in matched" :key="item.id" class="c-record -hovernone">
                    <p class="c-record__day u-mr__30">{{ item.created_at }}</p>
                    <p class="c-record__text">{{ item.text }}</p>
                </li>
            </ul>

            <!-- トップにもどる -->
            <transition name="modal">
                <a v-show="toTop" href="#" class="c-record__link--top u-hover">
                    <i class="fas fa-arrow-up"></i>
                </a>
            </transition>

        </div>

    </div>
</template>

<script>
    export default {
        props: [
            'record',
            'items'
        ],
        data () {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                toTop: false,
                years: [],
                selectYear: '',
            }
        },
        created () {
            this.getYears()
            window.addEventListener('scroll', this.onScroll)
        },
        destroyed () {
            window.removeEventListener('scroll', this.onScroll)
        },
        computed: {
            matched() {
                return this.items.filter(e => {
                    return !this.selectYear || e.created_at.slice(0, 4) === this.selectYear
                }, this)
            }
        },
        methods: {
            onScroll() {
                this.toTop = window.scrollY > 200
            },
            getYears() {
                let items = this.items
                if(items.length) {
                    let lastYear = items[0].created_at.slice(0, 4)
                    let firstYear = items[items.length - 1].created_at.slice(0, 4)

                    if(lastYear - firstYear === 0) {
                        this.years = [lastYear]
                    } else if(lastYear - firstYear === 1) {
                        this.years = [firstYear, lastYear]
                    } else {
                        let num = lastYear - firstYear
                        for(let i=0; i<=num; i++) {
                            let year = Number(firstYear) + i
                            this.years.push(String(year))
                        }
                    }
                } else {
                    this.years = []
                }
            },
            setSelectYear(year) {
                this.selectYear = year
            },
            clearSelectYear() {
                this.selectYear = ''
            }
        }
    }
</script>
<style>
    .modal-enter-active, .modal-leave-active {
        transition: opacity .3s
    }
    .modal-enter, .modal-leave-to {
        opacity: 0
    }
</style>
