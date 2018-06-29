<template>
    <v-card class="mt-2">
        <v-card-title primary-title>
            <div>
                <h3 class="headline mb-0">
                    <router-link :to="data.path">{{ data.title }}</router-link>
                </h3>
                <div class="grey--text">{{ data.user }} said {{ data.created_at }}</div>
            </div>
        </v-card-title>
       <v-card-text>
           {{ data.body }}
       </v-card-text>
    </v-card>
</template>

<script>
    export default {
        props: ['data'],
        data () {
            return {
                card_text: 'Lorem ipsum dolor sit amet, brute iriure accusata ne mea. Eos suavitate referrentur ad, te duo agam libris qualisque, utroque quaestio accommodare no qui. Et percipit laboramus usu, no invidunt verterem nominati mel. Dolorem ancillae an mei, ut putant invenire splendide mel, ea nec propriae adipisci. Ignota salutandi accusamus in sed, et per malis fuisset, qui id ludus appareat.'
            }
        }
    }
</script>