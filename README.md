BoatCo Demo

Test Queries:

{
  top_boats(first: 10) {
    data {
      id
      boat_name
      category {
        category_name
      }
      price
    }
    paginatorInfo {
      currentPage
      lastPage
    }
  }
}


{
  boat(id:1) {
    id
    boat_name
    description
    model_year
    price
    length
    width
    merchant {
      name
      email
    }
    condition {
      condition
    }
    category {
      category_name
    }
    model {
      model
    }
    city {
      city
    }
  }
}

query filterQuery {
  boats(first: 10, filter: {category: 2
    condition: 1
    model_year: {
      min:2022
      max:2023
    }
		country_name: "UK"
    price_range:{
      min:3000
      max:5000000
    }
    length_range:{
      min:1
      max:1000
    }
    width_range:{
      min:1
      max:1000
    }}) {
    data {
      id
    	boat_name
    	description
    	model_year
      price
      length
      width
      merchant {
        name
        email
      }
      condition {
        condition
      }
      category {
        category_name
      }
      model {
        model
      }
      city {
        city
      }
    }
    paginatorInfo {
      currentPage
      lastPage
    }
  }
}