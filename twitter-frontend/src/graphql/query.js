import gql from 'graphql-tag'

export const TIMELINE = gql`
  query($id: Int!) {
    Timeline(id: $id) {
      id
      tweet {
        id
        content
        account {
          twitter_id
          avatar
        }
      }
      originalFavorite {
        account {
          twitter_id
          name
        }
      }
      favorite {
        favorite_at
      }
    }
  }
`
