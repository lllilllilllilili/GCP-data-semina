# GCP-Semina
자동화 데이터 수집 및 분석 처리 

<<<<<<< HEAD
![스크린샷 2021-04-26 오후 6.43.53](/Users/hwang-ingyu/GCP-data-semina/public/architecture.PNG)

![gcp-semina-version](https://img.shields.io/badge/gcp_semina_version-v0.0.1-blue?logo=Google Cloud) 
=======
![스크린샷 2021-04-26 오후 6.43.53](/public/architecture.PNG)
>>>>>>> eb62ef1a6e4826f0b2fedb5e2f29028115c699ff

.

![gcp-semina-version](https://img.shields.io/badge/gcp_semina_version-v0.0.1-blue?logo=Google Cloud)

.

<<<<<<< HEAD
![php](https://img.shields.io/badge/php-v7.3-blueviolet?logo=php)
=======
![스크린샷 2021-04-26 오후 6.43.53](./GCP-data-semina/public/airflow.PNG)
>>>>>>> eb62ef1a6e4826f0b2fedb5e2f29028115c699ff

.

<<<<<<< HEAD
![php](https://img.shields.io/badge/Terraform-v0.12.24-blueviolet?logo=Terraform)
=======
![스크린샷 2021-04-26 오후 6.43.53](./GCP-data-semina/public/storage.PNG)
>>>>>>> eb62ef1a6e4826f0b2fedb5e2f29028115c699ff

.

<<<<<<< HEAD
![Docker](https://img.shields.io/badge/Docker-v20.10.5-informational?logo=Docker)
=======
![스크린샷 2021-04-26 오후 6.43.53](./GCP-data-semina/public/dataflow.PNG)
>>>>>>> eb62ef1a6e4826f0b2fedb5e2f29028115c699ff

.

![Airflow](https://img.shields.io/badge/Airflow-v1.10.15-success?logo=Apache Airflow)

.

![Airflow](https://img.shields.io/badge/Elasticsearch-v-yellow?logo=Elasticsearch)

.

![Airflow](https://img.shields.io/badge/Elasticsearch-v-ff69b4?logo=Kibana)

.

![Apache Beam](https://img.shields.io/badge/Apache Beam-v-red?logo=Apache Beam)

. 



## Module 1 :: Schedule for Data processing

### Composer based on airflow

- Prerequisite
  - [Input File](./laC-airflowToPreprocessing/airflowdagstorage/inputFile.txt)
  - [Schema](./laC-airflowToPreprocessing/airflowdagstorage/jsonSchema.json)
  - [TransformCSVtoJSON](./laC-airflowToPreprocessing/airflowdagstorage/transformCSVtoJSON.js)
  - [Dags](./laC-airflowToPreprocessing/dags/composer-dataflow-dag.py)

- Composer Create
  - ```
    gcloud composer environments create ENVIRONMENT_NAME \
        --location LOCATION \
        OTHER_ARGUMENTS
    ```

- BigQuery Create

  - ```
    bq mk \
    --table \
    --expiration integer \
    --description description \
    --label key:value, key:value \
    project_id:dataset.table \
    schema
    ```

- Data Studio Create



## Module2 :: Web Application CI&CD

#### Github Repository

- Directory

  - ```
    environments
    |-- main
    |     `-- main.tf
    |		`-- cloudbuild.yaml
    |--
    ```

#### Cloud Build

- Prerequisite

  - [CloudBuild API Enable](https://console.cloud.google.com/flows/enableapi?apiid=cloudbuild.googleapis.com&%3Bredirect=https%3A%2F%2Fcloud.google.com%2Fbuild%2Fdocs%2Fautomating-builds%2Fcreate-manage-triggers&hl=ko&_ga=2.263134796.1136088960.1619399750-1686518364.1619185903&_gac=1.23581128.1619770642.Cj0KCQjw1a6EBhC0ARIsAOiTkrGvF5hv2oJ_8y0rKFioa6E_05KjaCKp_aFdFgWstE-5pA5M2B6ne-8aAmH0EALw_wcB)
  - Github
  - [cloudbuild.yaml](./laC-cloudRunDeploy/cloudbuild.yaml)

- Build Trigger Create

  - ```
     gcloud beta builds triggers create github \
        --repo-name=REPO_NAME \
        --repo-owner=REPO_OWNER \
        --branch-pattern=BRANCH_PATTERN \ # or --tag-pattern=TAG_PATTERN
        --build-config=BUILD_CONFIG_FILE \
    ```

- Build Trigger
  - [CloudBuild Trigger](https://console.cloud.google.com/cloud-build/triggers?hl=ko&_ga=2.228531037.1136088960.1619399750-1686518364.1619185903&_gac=1.87086442.1619770642.Cj0KCQjw1a6EBhC0ARIsAOiTkrGvF5hv2oJ_8y0rKFioa6E_05KjaCKp_aFdFgWstE-5pA5M2B6ne-8aAmH0EALw_wcB)

#### Terraform

- [main.tf](./laC-cloudRunDeploy/environments/main/main.tf)

#### 

<<<<<<< HEAD
=======
![스크린샷 2021-04-26 오후 6.43.53](./GCP-data-semina/public/bigQuery.PNG)
>>>>>>> eb62ef1a6e4826f0b2fedb5e2f29028115c699ff




<<<<<<< HEAD
=======
![스크린샷 2021-04-26 오후 6.43.53](./GCP-data-semina/public/bi.PNG)
>>>>>>> eb62ef1a6e4826f0b2fedb5e2f29028115c699ff
