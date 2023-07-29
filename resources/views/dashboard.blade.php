<script>
// initTE({ Chart });

const dataBarCustomTooltip = {
    type: "bar",
    data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
        label: "Traffic",
        data: [30, 15, 62, 65, 61, 65, 40],
        },
    ],
    },
};

const optionsBarCustomTooltip = {
    options: {
    plugins: {
        tooltip: {
        callbacks: {
            label: function (context) {
            let label = context.dataset.label || "";
            label = `${label}: ${context.formattedValue} users`;
            return label;
            },
        },
        },
    },
    },
};

new Chart(
    document.getElementById("bar-chart-custom-tooltip"),
    dataBarCustomTooltip,
    optionsBarCustomTooltip
);
</script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Ingresaste con éxito!


                    <div class="mx-auto w-3/5 overflow-hidden">
                        <canvas id="bar-chart-custom-tooltip"></canvas>
                      </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>



