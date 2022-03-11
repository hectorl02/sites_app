<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Módulo de Transferencias
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">  
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px0">
                            <h3 class="text-lg text-gray-900">Detalle de una Transferencia</h3>
                            <p class="text-sm text-gray-600">{{ note.id }}</p>
                        </div>
                    </div>
                    <div class="md:col-span-2 mt-5 md:mt-0">
                        <div class="shadow bg-white md:rounded-md p-4">
                            <table>
                                <tr>
                                    <td class="border px-4 py-2">ID</td>
                                    <td class="border px-4 py-2">MONTO</td>
                                    <td class="border px-4 py-2">FECHA</td>

                                </tr>

                                <td class="border px-4 py-2">
                                    {{ note.id }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ note.amount }}
                                </td>
                                <td class="border px-4 py-2">
                                    {{ note.created_at.split('T')[0] }}
                                </td>
                                
                                
                            </table>

                            <hr class="my-6">

                            <inertia-link :href="route('notes.index')">
                                Volver
                            </inertia-link>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
        props: {
            note: Object,
        }
    }
</script>
