<template>
   <v-container
    id="dashboard"
    fluid
    tag="section"
  >
  <v-col
        cols="12"
        lg="4"
      >
        <base-material-chart-card
          :data="emailsSubscriptionChart.data"
          :options="emailsSubscriptionChart.options"
          :responsive-options="emailsSubscriptionChart.responsiveOptions"
          color="#E91E63"
          hover-reveal
          type="Bar"
        >
          <template v-slot:reveal-actions>
            <v-tooltip bottom>
              <template v-slot:activator="{ attrs, on }">
                <v-btn
                  v-bind="attrs"
                  color="info"
                  icon
                  v-on="on"
                >
                  <v-icon
                    color="info"
                  >
                    mdi-refresh
                  </v-icon>
                </v-btn>
              </template>

              <span>Refresh</span>
            </v-tooltip>

            <v-tooltip bottom>
              <template v-slot:activator="{ attrs, on }">
                <v-btn
                  v-bind="attrs"
                  light
                  icon
                  v-on="on"
                >
                  <v-icon>mdi-pencil</v-icon>
                </v-btn>
              </template>

              <span>Change Date</span>
            </v-tooltip>
          </template>

          <h4 class="card-title font-weight-light mt-2 ml-2">
            Website Views
          </h4>

          <p class="d-inline-flex font-weight-light ml-2 mt-1">
            Last Campaign Performance
          </p>

          <template v-slot:actions>
            <v-icon
              class="mr-1"
              small
            >
              mdi-clock-outline
            </v-icon>
            <span class="caption grey--text font-weight-light">updated 10 minutes ago</span>
          </template>
        </base-material-chart-card>
      </v-col>

      <v-col
        cols="12"
        lg="4"
      >
        <base-material-chart-card
          :data="dailySalesChart.data"
          :options="dailySalesChart.options"
          color="success"
          hover-reveal
          type="Line"
        >
          <template v-slot:reveal-actions>
            <v-tooltip bottom>
              <template v-slot:activator="{ attrs, on }">
                <v-btn
                  v-bind="attrs"
                  color="info"
                  icon
                  v-on="on"
                >
                  <v-icon
                    color="info"
                  >
                    mdi-refresh
                  </v-icon>
                </v-btn>
              </template>

              <span>Refresh</span>
            </v-tooltip>

            <v-tooltip bottom>
              <template v-slot:activator="{ attrs, on }">
                <v-btn
                  v-bind="attrs"
                  light
                  icon
                  v-on="on"
                >
                  <v-icon>mdi-pencil</v-icon>
                </v-btn>
              </template>

              <span>Change Date</span>
            </v-tooltip>
          </template>

          <h4 class="card-title font-weight-light mt-2 ml-2">
            Daily Sales
          </h4>

          <p class="d-inline-flex font-weight-light ml-2 mt-1">
            <v-icon
              color="green"
              small
            >
              mdi-arrow-up
            </v-icon>
            <span class="green--text">55%</span>&nbsp;
            increase in today's sales
          </p>

          <template v-slot:actions>
            <v-icon
              class="mr-1"
              small
            >
              mdi-clock-outline
            </v-icon>
            <span class="caption grey--text font-weight-light">updated 4 minutes ago</span>
          </template>
        </base-material-chart-card>
      </v-col>

      <v-col
        cols="12"
        lg="4"
      >
        <base-material-chart-card
          :data="dataCompletedTasksChart.data"
          :options="dataCompletedTasksChart.options"
          hover-reveal
          color="info"
          type="Line"
        >
          <template v-slot:reveal-actions>
            <v-tooltip bottom>
              <template v-slot:activator="{ attrs, on }">
                <v-btn
                  v-bind="attrs"
                  color="info"
                  icon
                  v-on="on"
                >
                  <v-icon
                    color="info"
                  >
                    mdi-refresh
                  </v-icon>
                </v-btn>
              </template>

              <span>Refresh</span>
            </v-tooltip>

            <v-tooltip bottom>
              <template v-slot:activator="{ attrs, on }">
                <v-btn
                  v-bind="attrs"
                  light
                  icon
                  v-on="on"
                >
                  <v-icon>mdi-pencil</v-icon>
                </v-btn>
              </template>

              <span>Change Date</span>
            </v-tooltip>
          </template>

          <h3 class="card-title font-weight-light mt-2 ml-2">
            Completed Tasks
          </h3>

          <p class="d-inline-flex font-weight-light ml-2 mt-1">
            Last Last Campaign Performance
          </p>

          <template v-slot:actions>
            <v-icon
              class="mr-1"
              small
            >
              mdi-clock-outline
            </v-icon>
            <span class="caption grey--text font-weight-light">campaign sent 26 minutes ago</span>
          </template>
        </base-material-chart-card>
      </v-col>
  </v-container>
</template>