<template>
    <div v-for="keyword in keywords" class="card shadow mt-3">
        <div class="card-body p-0 pb-2">
            <div class="row m-0 p-0 g-2">
                <div class="col-12">{{ keyword.date }}</div>

                <div v-for="note in keyword.keywords" class="col-auto badge bg-secondary fs-6 mx-1">
                    <a @click="deleteKeyword(note.id)">{{ note.keyword }}</a>
                </div>

            </div>
        </div>
    </div>

</template>

<script>
import useKeywords from "../../composables/keyword";
import { onMounted } from "vue";

export default {
    setup() {
        const { keywords, getKeywords,destroyKeyword } = useKeywords()

        onMounted(getKeywords)

        const deleteKeyword = async (id) => {
            if (!window.confirm('Are you sure?')){
                return
            }

            await destroyKeyword(id);
            await getKeywords();
        }

        return {
            keywords,
            deleteKeyword

        }
    }
}

</script>

<style scoped>

</style>
