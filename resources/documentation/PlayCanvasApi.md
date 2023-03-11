---
title: "PlayCanvas API Documentation"
path: playcanvas-api
order: 2
---
# Play Canvas API

This is used to connect Laravel Universe to PlayCanvas

  __Base URL__

      APP URL: https://fewzen.com/api/v1


## Initial Load

Used to obtain the initial data to initilise the universe


  __Request URL__

      GET: /universe/{id}

  __Request Data__
      {}

   __Response Data__

```json
{

  "client_id" : "45453h5jk453545",
  "client_secret" : "hgfjhgfjhgffghfhg",
  "view_id" : "3lkjh3-lkjhlkjh4-4554545",
  "name" : "Application Journey",
  "scene": "Universe/Office",
    "data_selection": {
    "time": "Real Time/Date Time"
  },
  "render_information": {
    "camera": {
      "type": "Freeflow/Fixed/3rd Person",
      "starting_position": {
          "X": 0,
          "Y": 0,
          "Z": 0
      }
    },
    "position": {
          "X": 0,
          "Y": 0,
          "Z": 0
      }
    },
  "states": [
      {
        "id": 1,
        "display_name": "Accepted Applications/Qualified Leads",
        "name": "Accepted/Qualified",
         "group" :
          {
            "representation": "Bowl/Vortex/Building/Funnel/Cube/Mesh/Orb"
          },
        "individual" :
          {
            "representation": "Dot/Person/Cube/Gold/Whole Circle",
            "total_format": "Number/Currency/Percent"
          },

           "current_state" : {
            "size_multiplier": 1,
            "color": "#fff",
            "animation": "static/rotate/pulse/flash/"
          },
        "position" : [{
          "X": 0,
          "Y": 0,
          "Z": 0
        }]
      }
  ],
  "entities": [{
          "unique_reference": 1,
          "state_id": 1,
          "current_state" : {
            "size_multiplier": 1,
            "color": "#fff",
            "animation": "static/rotate/pulse/flash/"
          }

  }]
}
```