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