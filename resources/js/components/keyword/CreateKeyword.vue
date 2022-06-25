<template>

    <div class="card shadow">
        <!--Card content-->
        <div class="card-body p-1">
            <form @submit.prevent="saveKeyword">
                <div v-if="errors">
                    <div v-for="(v, k) in errors" :key="k" class="text-danger">
                        <p v-for="error in v" :key="error" class="text-sm">
                            {{ error }}
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Title Input Form -->
                        <div class="input-group">
                            <input type="text" name="keyword" id="keyword" class="form-control" autofocus placeholder="Keyword" v-model="form.keyword">
                            <button type="submit" class="btn btn-outline-primary" id="submit_memory_keyword">Submit</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</template>
<script>
import { reactive } from "vue";
import useKeywords from "../../composables/keyword";

export default {
    setup() {
        const form = reactive({
            'user_id': '1',
            'keyword': '',
        })

        const  { errors, storeKeyword } = useKeywords()

        const saveKeyword = async () => {
            await storeKeyword({...form});
        }

        return {
            form,
            errors,
            saveKeyword
        }
    }
}
</script>
