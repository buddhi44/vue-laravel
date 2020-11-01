<template>
    <v-container
    id="dashboard"
    fluid
    tag="section"
  >
    <v-file-input
    :rules="rules"
    accept="image/png, image/jpeg, image/bmp"
    placeholder="Pick an avatar"
    prepend-icon="mdi-camera"
    label="Avatar"
  ></v-file-input>


  <v-file-input
    label="File input"
    outlined
    dense
  ></v-file-input>


  <div class="text-center">
    <v-chip
      class="ma-2"
      label
    >
      Label
    </v-chip>

    <v-chip
      class="ma-2"
      color="pink"
      label
      text-color="white"
    >
      <v-icon left>
        mdi-label
      </v-icon>
      Tags
    </v-chip>

    <v-chip
      class="ma-2"
      color="primary"
      label
    >
      <v-icon left>
        mdi-account-circle-outline
      </v-icon>
      John Leider
    </v-chip>

    <v-chip
      class="ma-2"
      close
      color="cyan"
      label
      text-color="white"
    >
      <v-icon left>
        mdi-twitter
      </v-icon>
      New Tweets
    </v-chip>
  </div>

</v-container>
</template>



<script>
  export default {
    data: () => ({
      rules: [
        value => !value || value.size < 2000000 || 'Avatar size should be less than 2 MB!',
      ],
    }),
  }
</script>