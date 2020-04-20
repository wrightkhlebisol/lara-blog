<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>
          <span class="badge badge-pill badge-danger">{{randNum}}</span>
          <div class="card-body">I'm an example component.</div>
          <a @click.prevent="doThis" v-if="fetching" class="btn btn-primary btn-sm">Click Me</a>
          <a href="#" class="btn btn-primary active" role="button">Some</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      users: [],
      randNum: null,
      fetching: true
    };
  },
  methods: {
    makeRand() {
      this.randNum = Math.floor(Math.random() * 1000);
    },
    doThis() {
      //   this.makeRand();
      this.fetching = false;
      fetch(`https://jsonplaceholder.typicode.com/todos`, {
        mode: "cors"
      })
        .then(response => response.json())
        .then(user => {
          this.fetching = true;
          console.log(user);
        });
    }
  }
};
</script>
