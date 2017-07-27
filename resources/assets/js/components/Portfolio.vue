<template>

    <div class="content content-flex my-jobs">
        <div class="col-xs-12 col-md-6 done-stuff">
            <h2 class="page-header text-center">Projektid</h2>
            <div class="job-list">

                    <div class="col-md-12" v-for="(project, index) in projects">
                        <div class="list-item btn" v-if="project" @click="changeActive(index)">{{ project.title}}</div>&emsp;{{ project.meta}}
                    </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 project" v-if="projects[active]">
            <div class="project-header">
                <img :src="'./public/assets/upload/'+projects[active].image" height="200px">
                <h3 class="project-text title">{{ projects[active].title }}<br><small>{{ projects[active].meta}}</small></h3>
            </div>
            <div class="project-text"><i class="ti-pencil-alt"></i><div>{{ projects[active].content}}</div></div>
            <div class="project-text"><i class="fa fa-file-code-o" aria-hidden="true"></i><div>Minu roll: {{ projects[active].myPart}}</div></div>

            <div class="project-text" v-if="projects[active].url">
                <i class="ti-link"></i><a :href="projects[active].url" target="_blank" class="project-url">{{ projects[active].url}}</a>
            </div>
        </div>

    </div>
</template>

<script>

export default {
      props: {

      },

      data () {
        return {
            projects: [],
            active: 0,
         }
      },

      methods: {
        changeActive: function (id) {
            var that = this;
            that.active = id;
        }
      },
      created() {
      var that = this;
      var data = {controller : 'ProjectController@projects'};

        this.$http.post(location.protocol + '//' + location.host + '/ajax', data).then(response => {
            that.projects = response.body
          }, response => {
            // error callback
          });
      }
}
</script>