# Unifonic - PHP Application Deployment on EKS

This project demonstrates how to deploy PHP application on an Amazon EKS cluster using **AWS CodeBuild** for CI, **ArgoCD** for CD, and **Kubernetes manifests** for orchestration.

---

## **Features**
- **CI/CD Pipeline**:  
  - **AWS CodeBuild** for building Docker images and updating manifests.  
  - **ArgoCD** for GitOps-driven deployments.  
- **Kubernetes Manifests**:  
  - Deployment, Service, Ingress, HPA, ConfigMap, and Secret.  
- **Scalability**: Horizontal Pod Autoscaler (HPA) for dynamic scaling.  
- **Security**: Kubernetes Secrets for sensitive credentials.  

---

## **Prerequisites**
 - **AWS Account:** With permissions for EKS, ECR, CodeBuild, and IAM.
 - **EKS Cluster**
 - **ArgoCD**
 - **GitHub Repository**
 - **Docker**

---

## **Architecture Overview**
**CI Pipeline:**
 - AWS CodeBuild builds the Docker image, runs tests, and pushes the image to Amazon ECR.
 - Updates Kubernetes manifests.

**CD Pipeline:**
 - ArgoCD syncs the menifest files with the EKS cluster, deploying the application.
 - Manages zero-downtime deployments using Kubernetes Deployments and Horizontal Pod Autoscaler (HPA).

**Infrastructure:**
 - EKS Cluster: Hosts the PHP application pods.
 - RDS MySQL / Aurora MySQL: Database for the application.
 - Secrets: Store sensitive configurations.
 - Ingress & Service: Expose the application to external traffic.