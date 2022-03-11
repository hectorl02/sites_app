<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Módulo de Trasferencias
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="px-4 sm:px0">
              <h3 class="text-lg text-gray-900">Listado de transacciones</h3>
              <p class="text-sm text-gray-600">
                Elige el registro y mira el detalle
              </p>
            </div>
          </div>
          <div class="md:col-span-2 mt-5 md:mt-0">
            <div class="shadow bg-white md:rounded-md p-4">
              <div class="flex justify-between">
                <input
                  type="text"
                  class="form-input rounded-md shadow-sm"
                  placeholder="Busca tu transferencia"
                  v-model="q"
                />

                <inertia-link
                  :href="route('notes.create')"
                  class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md"
                >
                  Transferir
                </inertia-link>
              </div>
              <hr class="my-6" />
              <table>
                <td class="border px-4 py-2">ID</td>
                <td class="border px-4 py-2">MONTO</td>
                <td class="border px-4 py-2">FECHA</td>
                <td class="border px-4 py-2">ACCIONES</td>

                <tr v-for="note in notes">
                  <td class="border px-4 py-2">
                    {{ note.id }}
                  </td>
                  <td class="border px-4 py-2">
                    {{ note.amount }}
                  </td>
                  <td class="border px-4 py-2">
                    {{ note.created_at.split('T')[0] }}
                  </td>
                  <td class="border px-4 py-2">
                    <inertia-link :href="route('notes.show', note.id)">
                      Ver
                    </inertia-link>
                  </td>
                  
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
  components: {
    AppLayout,
  },
  props: {
    notes: Array,
  },
  data() {
    return {
      q: "",
    };
  },
  watch: {
    q: function (value) {
      this.$inertia.replace(this.route("notes.index", { q: value }));
    },
  },
};
</script>
