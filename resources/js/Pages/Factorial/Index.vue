<template>
	
        <div class="pt-5 px-10"  @click.native="resetErrors()">
            <div class="content-text">
                <div class="grid gap-6 mb-6 md:grid-cols-2">

                    <div>
                        <label for="number" class="block mb-2 text-sm font-medium text-gray-900 ">Enter Number Here<span class="text-xs text-red-500 ml-1">{{errors.number}}</span></label>
                        <input type="tel" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Juan"  required v-model="number" :class="{'border-2 border-red-400' : errors.number}">
                    </div>

                </div>

            	<p class="text-2xl mb-5">RESULT : {{factorial_answer}}</p>      

                <button @click.native="calculate" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Calculate</button>
            </div>  


        </div>

</template>

<script>

export default {

    data(){
        
        return {
        	errors:{},
        	number:1,
        	factorial_answer:null,
        }
    },

    methods : {
    	calculate()
    	{
    		this.factorial_answer = this.factorial(this.number);
    	},

		factorial(n){
		    if(n < 0){
		        this.errors.number = "Please enter a possitive number.";
		    }
		    
		    //base case
		    if(n == 0 || n == 1){
		        return 1;
		    //recursive case
		    }else{
		        return n * this.factorial(n-1);
		    }
		}

    }

};
</script>