<template>
    
        <div>
            <p class="pt-20 md:pt-10 px-10 header-text text-2xl inline-flex items-center">
                List - Employees
            </p>
        </div>

        <div class="px-10 pt-1">
            
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-600 ">
                    <thead class="text-xs text-gray-700 uppercase border-b-4 border-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-2 py-3">
                                First Name
                            </th>

                            <th scope="col" class="px-2 py-3">
                                Last Name
                            </th>

                            <th scope="col" class="px-2 py-3">
                                Position
                            </th>

                            <th scope="col" class="px-2 py-3">
                                Create Date
                            </th>

                            <th scope="col" class="px-2 py-3">
                                <button @click.native="gotoCreate()" class="bg-green-500 px-4 py-2 text-white">ADD</button>
                            </th>

                        </tr>
                    </thead>
                    <tbody class="table-text tracking-widest">
                        
                        <tr class="border border-b-1 bg-white hover:bg-blue-50 cursor-pointer" v-for="(employee,index) in employees.data" :key="employee.id" :class="{'bg-gray-50' : (index % 2 === 0), 'bg-blue-100' :  lastOpenedUserId == employee.id}"

                        >

                            <td class="px-6 py-4">
                                {{employee.id}}
                            </td>

                            <td class="px-2 py-4">
                                {{employee.first_name}}
                            </td>
                            <td class="px-2 py-4">
                                {{employee.last_name}}
                            </td>

                            <td class="px-2 py-4">
                                {{employee.position}}
                            </td>
            
                            <td class="px-2 py-4">
                                {{employee.create_date}}
                            </td>

                            <td class="px-2 py-4">
                                <div>
                                    <button @click.native="editEmployee(employee.id)" v-if="employee.can_update" class="bg-yellow-500 px-4 py-2 text-white mr-1">Edit</button>
                                    <button @click.native="deleteEmployee(employee.id)" v-if="employee.can_delete" class="bg-red-500 px-4 py-2 text-white">Delete</button>
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>

        </div>


</template>


<script>


export default {
    props:['employees'],

    data(){
        
        return {

          errors :{},
          form: this.$inertia.form({
              first_name: null,
              last_name: null,
            }, {
              resetOnSuccess: true,
            }),           
        }
    },

    methods : {

        gotoCreate()
        {
            window.open(route('employees.create'));
        },

        editEmployee(employee_id){
            window.open(route('employees.edit', { id: employee_id }));
        },

        deleteEmployee(employee_id) {
          if (confirm('Are you sure you want to delete this employee?')) {
            this.form.delete(route('employees.destroy', { id: employee_id })).then(() => {
              // Redirect to employee list page or show success message
            });
          }
        }


    },
};

</script>

