import { ref } from 'vue'
import axios from "axios"
import { useRouter } from 'vue-router'


export default function useKeywords(){
    const keywords = ref([])
    const router = useRouter()
    const errors = ref('')

    const getKeywords = async () => {
        let response = await axios.get('/api/keywords')
        keywords.value = response.data.data;

    }

    const storeKeyword = async (data) => {
        errors.value = ''
        try {
            await axios.post('/api/keywords', data)
            window.location.reload()
        } catch (e) {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            }
            //If error happen, autofocus on input again
            document.getElementById("keyword").focus();
        }
    }

    const destroyKeyword = async (id) => {
        await axios.delete('/api/keywords/' + id)
    }

    return {
        keywords,
        errors,
        getKeywords,
        storeKeyword,
        destroyKeyword
    }

}
