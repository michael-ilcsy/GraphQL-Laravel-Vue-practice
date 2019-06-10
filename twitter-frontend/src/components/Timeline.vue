<template>
  <v-list two-line>
    <template v-for="(timeline, index) in timelines">
      <v-list-tile
        :key="index"
        avatar
      >
        <v-list-tile-avatar>
          <img :src="'http://localhost:8000/storage/images/' + timeline.tweet.account.avatar"
               v-if="timeline.tweet.account.avatar"/>
          <v-icon v-else>account_circle</v-icon>
        </v-list-tile-avatar>
        <v-list-tile-content>
          <div v-text="timeline.originalFavorite ? timeline.originalFavorite.account.name + 'さんがいいねしました' : ''"></div>
          <v-list-tile-sub-title v-html="timeline.tweet.account.twitter_id"></v-list-tile-sub-title>
          <v-list-tile-title v-html="timeline.tweet.content"></v-list-tile-title>
        </v-list-tile-content>
      </v-list-tile>
      <v-divider
        :key="index+'_divider'"
      ></v-divider>
    </template>
  </v-list>
</template>

<script>
export default {
  name: 'Timeline',
  props: {
    timelines: Array
  }
}
</script>
