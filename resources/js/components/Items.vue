<template>
    <div>
        <!-- タイトル -->
        <div class="c-titleWrap u-mb__30">
            <h2 class="u-mb__10">{{ record.record_name }}</h2>
            <h3 class="u-mb__20">のきろく</h3>
            <p>こつこつ数：{{ items.length }}</p>
            <p v-if="record.release === 1">公開中</p>
            <p v-else>非公開</p>
        </div>

        <div class="p-container">
            <!-- きろくをついか -->
            <form class="c-form u-mb__30">
                <p class="p-item__textCount u-mr__20 u-mb__5">{{ text.length }}/50</p>
                <input type="text" name="item" v-model.trim="text" :class="{error:hasError}" placeholder="50文字以内" maxlength="50" required class="u-mb__20">
                <button v-on:click="addItem" class="c-button -s">追加</button>
            </form>
            <!-- きろくへんしゅう -->
            <ul class="u-dp__flex u-mb__30">
                <li class="u-mr__50"><a :href="`/kotunote/records/${record.id}/edit`">きろくの編集</a></li>
                <li v-on:click="showRecordModal"><a href="#">きろくの消去</a></li>
            </ul>

            <!-- 区切り線 -->
            <hr class="u-hr__dashed u-mb__30">

            <!-- ソート -->
            <ul v-if="years.length" class="c-record__sort u-mb__30">
                <li v-on:click="clearSelectYear">
                    <p class="u-c__blue u-hover">all</p>
                </li>
                <li v-for="(year,id) in years" :key="id" v-on:click="setSelectYear(year)">
                    <p class="u-c__blue u-hover">{{ year }}</p>
                </li>
            </ul>

            <!-- きろくのいちらん -->
            <ul class="c-recordWrap">
                <li v-for="item in matched" :key="item.id" v-on:click="showItemModal(item)" class="c-record">
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

        <!-- =======================================
        モーダル
        ======================================= -->
        <!-- きろくのさくじょ -->
        <transition name="modal">
            <div v-show="recordModal">
                <div class="p-modal">
                    <i v-on:click="hideRecordModal" class="p-modal__close fas fa-times"></i>
                    <p class="u-mb__50">きろくを消去しますか？</p>
                    <!-- ボタン -->
                    <form :action="`/kotunote/records/${record.id}`" method="POST">
                        <div class="c-buttonWrap -side">
                            <button type="button" v-on:click="hideRecordModal" class="c-button -sideN -border u-mr__20"><a>いいえ</a></button>
                            <input type="hidden" name="_token" :value="csrf">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="消去" class="c-button  -sideY">
                        </div>
                    </form>
                </div>
                <div v-on:click="hideRecordModal" class="p-modal__back"></div>
            </div>
        </transition>

        <!-- あいてむのへんしゅう＆さくじょ -->
        <transition name="modal">
            <div v-show="itemModal">
                <div class="p-modal">
                    <i v-on:click="hideItemModal" class="p-modal__close fas fa-times"></i>
                    <!-- ボタン -->
                    <div class="c-buttonWrap">
                        <p class="u-mb__20">テキスト編集</p>
                        <form class="c-form u-mb__30">
                            <p class="p-item__textCount u-mr__20 u-mb__5">{{ checkText.length }}/50</p>
                            <input v-model="checkText" type="text" name="item" placeholder="50文字以内" maxlength="50" required class="edit u-mb__10" :class="{error:hasError}">
                            <button v-on:click="updateItem" class="c-button -s"><a>編集</a></button>
                        </form>
                        <hr class="u-hr__dashed u-mb__30">
                        <div class="p-item__modal--iconWrap u-mb__30">
                            <div v-on:click="deleteItem" class="p-item__modal--icon -trash">
                                <i class="fas fa-trash-alt"></i>
                            </div>
                            <a :href="`http://twitter.com/share?text=【${record.record_name}のきろく】%0a${checkText}%0a&url=https://chikichiki-tony.sakura.ne.jp/kotunote/items/${record.id}%0a&hashtags=今日もこつこつ`" target="__blank" class="p-item__modal--icon -twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div v-on:click="hideItemModal" class="p-modal__back"></div>
            </div>
        </transition>

    </div>
</template>

<script>
    export default {
        props: [
            'record',
            'old'
        ],
        data () {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                toTop: false,
                recordModal: false,
                itemModal: false,
                text: '',
                items: [],
                years: [],
                selectYear: '',
                message: '',
                hasError: this.message ? true : false,
                checkId: '',
                checkText: ''
            }
        },
        created () {
            this.getItems()
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
            getItems() {
                axios.get('/kotunote/api/items/get/' + this.record.id)
                .then(res => {
                    this.items = res.data
                    this.getYears()
                })
                .catch(err => {
                    this.message = err
                });
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
            addItem() {
                axios.post('/kotunote/api/items/store', {
                    text : this.text,
                    record_id : this.record.id
                })
                .then(res => {
                    this.getItems()
                    this.text = ''
                    this.message = ''
                })
                .catch(err => {
                    this.message = err
                });
            },
            updateItem() {
                axios.put('/kotunote/api/items/update/' + this.checkId, {
                    text : this.checkText
                })
                .then(res => {
                    this.getItems()
                    this.itemModal = false
                    this.checkId = ''
                    this.checkText = ''
                    this.message = ''
                })
                .catch(err => {
                    this.message = err
                });
            },
            deleteItem() {
                axios.delete('/kotunote/api/items/delete/' + this.checkId)
                .then(res => {
                    this.years = []
                    this.getItems()
                    this.itemModal = false
                    this.checkId = ''
                    this.checkText = ''
                    this.message = ''
                })
                .catch(err => {
                    this.message = err
                });
            },
            setSelectYear(year) {
                this.selectYear = year
            },
            clearSelectYear() {
                this.selectYear = ''
            },
            showRecordModal() {
                this.recordModal = true
            },
            hideRecordModal() {
                this.recordModal = false
            },
            showItemModal(item) {
                this.checkId = item.id
                this.checkText = item.text
                this.itemModal = true
            },
            hideItemModal() {
                this.itemModal = false
                this.checkId = ''
                this.checkText = ''
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
